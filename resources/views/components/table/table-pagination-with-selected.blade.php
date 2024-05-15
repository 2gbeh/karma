<div class="pagination-and-action-area body">
  <div>
    <div class="select-and-apply-area">
      <div class="form-group width-300">
        <div class="form-line">
          <select class="form-control" name="with_selected" id="">
            <option value="0" hidden>With selected:</option>
            <option value="trash">Move to trash</option>
            <option value="delete">Delete permanently</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" name="with_selected_action" class="btn btn-sm btn-info waves-effect">
          Apply
        </button>
      </div>
    </div>
  </div>
  <div>
    <div class="custom-paginate">
      {{ $slot }}
    </div>
  </div>
</div>