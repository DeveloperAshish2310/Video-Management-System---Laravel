<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th> Client Name </th>
                <th> Email </th>
                <th> Shows </th>
                <th> Movies </th>
                <th> Username </th>
                <th> Joining Date </th>
                <th> User Status </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody id="tablecon">

            @forelse ($users as $user)
                <tr>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <td> {{ count(json_decode($user->show_history) ?? []) }} </td>
                    <td> {{ count(json_decode($user->movie_history) ?? []) }} </td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        @if ($user->allow_access == 1)
                          <div class='badge badge-outline-success'>
                              Approved
                          </div>
                        @elseif($user->allow_access == 2)
                          <div class='badge badge-outline-danger'>
                              Rejected
                          </div>
                        @else
                          <div class='badge badge-outline-warning'>
                              Pending
                          </div>
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-outline-primary" title="Pending to Create.." type="button">
                            Action
                        </button>
                    </td>
                </tr>
            @empty
                
            @endforelse
      
        </tbody>
    </table>
</div>