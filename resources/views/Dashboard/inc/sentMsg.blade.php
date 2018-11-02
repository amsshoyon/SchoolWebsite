
<div class="">
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-info">
            <div class="panel-heading"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Inbox</div>
            <div class="panel-body">
              <button id="select-all" class="btn btn-default" type="submit"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Select All</button>
              <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Mark as read</button>
              <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</button>
            </div>
            <table class="table table-hover">

              @foreach($users as $user)
              <tr>
                <td ><a href="#">
                  <tr class="inbox_row">
                    <td class="inbox_check">
                      <input type="checkbox" id="check2" class="cs-4" />
                      <label class="glyphicon glyphicon-unchecked" for="check2"></label>
                      <label class="glyphicon glyphicon-check" for="check2"></label>
                    </td>
                    <td class="inbox_email">
                      <strong>{{$user->email}}</strong>
                    </td>
                    <td class="inbox_name">
                      <strong>{{$user->name}}</strong>
                    </td>
                    <td class="cs-5 inbox_sub">
                      <strong>{{$user->subject}}</strong>
                    </td>
                    <td class="inbox_time">
                      <strong>{{$user->created_at}}</strong>
                    </td>
                    <td class="inbox_action">
                      <strong>Edit/Delete</strong>
                    </td>
                  </tr>
                </td></a>
              </tr>
              @endforeach

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="/js/inbox.js"></script>