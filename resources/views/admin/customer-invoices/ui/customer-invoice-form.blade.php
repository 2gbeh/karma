<div class="body">
  <form class="form" id="form_validation" method="post" action="">
    @csrf
    <div class="row clearfix">
      <x-form.form-select label="Select Customer" name="customer_id" :options="$params->terms_of_payment_options"
        required colspan="3" />
    </div>
    <div class="row clearfix">

      {{-- CUSTOMER INFO --}}
      <x-form.form-input label="Customer Name" name="name" required colspan="3" />
      <x-form.form-input label="Email Address" type="email" name="email" required colspan="3" />
      <x-form.form-input label="Phone Number" type="tel" name="phone" required colspan="3" />
      <x-form.form-input label="Home Address" name="address" required colspan="3" />

      {{-- INVOICE INFO --}}
      <x-form.form-input label="Invoice No." type="number" name="invoice_number" required colspan="4" />
      <x-form.form-input label="Invoice Date" type="date" name="invoice_date" required colspan="4" />
      <x-form.form-input label="Exchange Rate" name="exchange_rate" required colspan="4" />

      {{-- ACTION --}}
      <x-form.form-button as="Save" />
    </div>
  </form>
</div>