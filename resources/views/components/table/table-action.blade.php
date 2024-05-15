@props(['item', 'actions'])

<td class="tdTrashAction">
  @if(in_array('show', $actions))
  <a href="#" target="_blank" data-target="#largeModal" class="btn btn-xs btn-success waves-effect ajaxCall"
    data-toggle="tooltip" data-placement="top" title="Show" style="width:26px;height:26px">
    <i class="fas fa-eye" aria-hidden="true" style="font-size:12px;"></i>
  </a> &nbsp;
  @endif

  @if(in_array('edit', $actions))
  <a href="#" data-toggle="tooltip" data-placement="top" class="btn btn-xs btn-info waves-effect" title="Edit" style="width:26px;height:26px">
    <i class="fas fa-pencil-alt" aria-hidden="true" style="font-size:12px;"></i>
  </a> &nbsp;
  @endif

  @if(in_array('delete', $actions))
  <a href="#" data-toggle="tooltip" data-placement="top" class="btn btn-xs btn-danger waves-effect" title="Delete" style="width:26px;height:26px">
    <i class="fas fa-trash-alt" aria-hidden="true" style="font-size:12px;"></i>
  </a> &nbsp;
  @endif

  @if(in_array('export', $actions))
  <a href="#" data-toggle="tooltip" data-placement="top" class="btn btn-xs btn-warning waves-effect" title="Export" style="width:26px;height:26px">
    <i class="fas fa-file-pdf" aria-hidden="true" style="font-size:12px;"></i>
  </a> &nbsp;
  @endif
</td>