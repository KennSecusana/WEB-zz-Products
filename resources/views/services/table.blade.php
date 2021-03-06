<div class="table-responsive">
    <table class="table" id="services-table">
        <thead>
            <tr>
                <th>Product Model</th>
        <th>Product Issue</th>
        <th>Owner</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($services as $services)
            <tr>
                <td>{{ $services->Product_Model }}</td>
            <td>{{ $services->Product_Issue }}</td>
            <td>{{ $services->Owner }}</td>
            <td>{{ $services->Email }}</td>
            <td>{{ $services->Contact_Number }}</td>
            <td>{{ $services->Address }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['services.destroy', $services->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('services.show', [$services->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('services.edit', [$services->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
