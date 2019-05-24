<div class="table-responsive">
    <table class="table" id="refCategories-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Referral url</th>
                <th>Visits</th>
                <th>Signups</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($refCategories as $refCategories)
            <tr>
                <td>{!! $refCategories->name !!}</td>
                <td>{!! route('refs.user',['user_id'=>Auth::user()->id, 'ref_category'=>$refCategories->user_id]) !!}</td>
                <td>{!! $refCategories->referral_visits !!}</td>
                <td>{!! $refCategories->referral_count !!}</td>
                <td>
                    {!! Form::open(['route' => ['refCategories.destroy', $refCategories->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('refCategories.show', [$refCategories->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('refCategories.edit', [$refCategories->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
