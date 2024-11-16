@extends('layouts.app')

@section('content')
    <div class="block block-rounded m-4">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Expenses Chart
            </h3>
        </div>
        <div class="block-content block-content-full">
            <!-- Container for ECharts -->
            <div id="echart-bar" style="height: 400px;"></div> 
        </div>
    </div>

    <div class="block block-rounded m-4">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Expenses</h3>
            <a href="{{ route('expenses.create') }}" class="btn btn-primary btn-sm">Add Expense</a>
        </div>
        <div class="block-content block-content-full">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="row d-none">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="DataTables_Table_0_length">
                            <label>
                                <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                    class="form-select">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                            <label>
                                <input type="search" class="form-control" placeholder="Search.."
                                    aria-controls="DataTables_Table_0">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row dt-row">
                    <div class="col-sm-12">
                        <table
                            class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer"
                            id="expenses-table" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr>
                                    <th class="sorting">Name</th>
                                    <th class="sorting">Category</th>
                                    <th class="sorting">Amount</th>
                                    <th class="sorting">Date</th>
                                    <th class="sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- DataTables will fill this with data via AJAX -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite"></div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                            <ul class="pagination">
                                <!-- Pagination will be dynamically generated by DataTables -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const expenses = @json($expenses);

        // Chart Variables
        const categories = @json($categories);
        const expensesGrouped = @json($expensesGrouped);
        const monthlyData = @json($monthlyData);

        $(document).ready(function() {
            $('#expenses-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('expenses.index') }}',
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'category',
                        name: 'category'
                    },
                    {
                        data: 'amount',
                        name: 'amount'
                    },
                    {
                        data: function (row) {
                            return moment(row.date).format('DD-MM-YYYY');
                        },
                        name: 'date'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        // width: '10%'
                    }
                ],
                order: [[3, 'desc']]
            });

            renderExpensesChart();
        });

        function renderExpensesChart() {
            const chartDom = document.getElementById('echart-bar');
            const expensesChart = echarts.init(chartDom);

            const categoryColors = {
                'Food': '#ff7f50',
                'Travel': '#87cefa',
                'Utilities': '#32cd32',
                'Entertainment': '#da70d6',
                'Miscellaneous': '#ff4500'
            };

            const seriesData = categories.map(category => {
                return {
                    name: category,
                    type: 'bar',
                    data: monthlyData[category],
                    itemStyle: {
                        color: categoryColors[category]
                    }
                };
            });

            const option = {
                // title: {
                //     text: 'Expense Categories',
                //     left: 'center'
                // },
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    data: categories,
                    top: '5%'
                },
                xAxis: {
                    type: 'category',
                    data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    type: 'value',
                    name: 'Amount',
                    min: 0
                },
                series: seriesData
            };

            expensesChart.setOption(option);
        }

        function deleteExpense(expenseId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete it!',
                cancelButtonText: 'Cancel',
                reverseButtons: false
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ url('expenses') }}/${expenseId}`,
                        method: 'POST',
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}',
                        },
                        success: function (response) {
                            Swal.fire({
                                title: 'Deleted!',
                                text: 'Your expense has been deleted.',
                                icon: 'success',
                                confirmButtonText: 'OK',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                            });
                        },
                        error: function (error) {
                            Swal.fire(
                                'Error!',
                                'There was a problem deleting the expense.',
                                'error'
                            );
                        }
                    });
                }
            });
        }
    </script>
@endsection