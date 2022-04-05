@extends('admin.layout.master');

@section('adminContent')

<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <h5 class="card-header">انشاء قسم جديد</h5>
  <form class="card-body" action="/save_category" method="POST" enctype="multipart/form-data">

    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">اسم القسم</label>
        <input name="category_name" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-email">صورة القسم</label>
        <div class="input-group input-group-merge">
          <input  name="image" type="file"  class="form-control"  aria-describedby="multicol-email2" />

        </div>
      </div>

      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-confirm-password">تفعيل القسم</label>
          <div class="input-group input-group-merge">
          <label class="switch">
              <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">is active</span>
            </label>
          </div>
        </div>
      </div>
    </div>


    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-label-secondary">Cancel</button>
    </div>
  </form>
</div>



@endsection
