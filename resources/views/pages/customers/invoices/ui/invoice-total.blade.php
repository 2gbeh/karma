<form class="form" id="form_validation" method="post" action="">
  @csrf
  <div class="row clearfix">
    <x-form.form-input label="Balance Due" type="number" name="balance_due" required colspan="6" />
    <x-form.form-input label="Total" type="number" name="total" required colspan="6" />

    {{-- ACTION --}}
    <x-form.form-button />
  </div>
</form>