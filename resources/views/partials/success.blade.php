@if (session()->has('success'))
<div style="margin-top:70px;">
  <div class="alert alert-success text-center animated fadeIn">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>
      {!! session()->get('success') !!}
    </strong>
  </div>
</div>
@endif