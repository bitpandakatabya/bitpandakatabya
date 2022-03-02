
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1>Transactions</h1>
                </div>
                <div class="col-sm-6">
                    <a class="float-right btn btn-primary"
                       href="{{ route('transactions.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="px-3 content">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="p-0 card-body">
                @include('transactions.table')

                <div class="clearfix card-footer">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

