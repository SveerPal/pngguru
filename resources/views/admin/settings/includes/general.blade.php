<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">General Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="site_name">Site Name</label>
                <input class="form-control" type="text" placeholder="Enter site name" id="site_name" name="site_name" value="{{ config('settings.site_name') }}"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="site_title">Site Title</label>
                <input class="form-control" type="text" placeholder="Enter site title" id="site_title" name="site_title" value="{{ config('settings.site_title') }}"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="default_email_address">Default Email Address</label>
                <input class="form-control" type="email" placeholder="Enter site default email address" id="default_email_address" name="default_email_address" value="{{ config('settings.default_email_address') }}"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="default_phone">Default Phone </label>
                <input class="form-control" type="text" placeholder="Enter site default phone" id="default_phone" name="default_phone" value="{{ config('settings.default_phone') }}"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="default_address">Default Address</label>
                <input class="form-control" type="text" placeholder="Enter site default address" id="default_address" name="default_address" value="{{ config('settings.default_address') }}"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="email">Email Address</label>
                <input class="form-control" type="email" placeholder="Enter site email address" id="email" name="email" value="{{ config('settings.email') }}"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="phone"> Phone </label>
                <input class="form-control" type="text" placeholder="Enter site phone" id="phone" name="phone" value="{{ config('settings.phone') }}"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="address">Address</label>
                <input class="form-control" type="text" placeholder="Enter site  address" id="address" name="address" value="{{ config('settings.address') }}"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="map">Map</label>
                <textarea class="form-control" type="text" placeholder="Enter site  map" id="map" name="map">{{ config('settings.map') }}</textarea> 
            </div>

            <!-- <div class="form-group">
                <label class="control-label" for="currency_code">Currency Code</label>
                <input class="form-control" type="text" placeholder="Enter site currency code" id="currency_code" name="currency_code" value="{{ config('settings.currency_code') }}"/>
            </div>
            <div class="form-group">
                <label class="control-label" for="currency_symbol">Currency Symbol</label>
                <input class="form-control" type="text" placeholder="Enter site currency symbol" id="currency_symbol" name="currency_symbol" value="{{ config('settings.currency_symbol') }}"/>
            </div> -->
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>