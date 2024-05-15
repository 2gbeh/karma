@props(['as' => 'tbody', 'sn', 'item'])

@switch($as)
@case('thead')
<th class="checkbox_custom_style text-center">
  <input type="checkbox" name="selectTop" id="md_checkbox_p" class="chk-col-cyan" />
  <label for="md_checkbox_p"></label>
</th>
@break
@case('tfoot')
<th class="checkbox_custom_style text-center">
  <input type="checkbox" name="selectBottom" id="md_checkbox_footer" class="chk-col-cyan" />
  <label for="md_checkbox_footer"></label>
</th>
@break
@default
<th class="text-center">
  <input type="checkbox" name="items[id][]" value="{{ $item->id }}" id="md_checkbox_{{ $sn }}"
    class="chk-col-cyan selects" />
  <label for="md_checkbox_{{ $sn }}"></label>
</th>
@endswitch