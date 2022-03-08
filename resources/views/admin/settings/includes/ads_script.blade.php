<div class="tile">
    <form action="{{ route('admin.settings.update') }}" method="POST" role="form">
        @csrf
        <h3 class="tile-title">Ads Script</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="ads_script_first">Ads Script First</label>
                <textarea class="form-control" rows="4" placeholder="Enter add script" id="ads_script_first" name="ads_script_first">{{ config('settings.ads_script_first') }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="ads_script_second">Ads Script Second</label>
                <textarea class="form-control" rows="4" placeholder="Enter add script" id="ads_script_second" name="ads_script_second">{{ config('settings.ads_script_second') }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="ads_script_third">Ads Script Thrid</label>
                <textarea class="form-control" rows="4" placeholder="Enter add script" id="ads_script_third" name="ads_script_third">{{ config('settings.ads_script_third') }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="ads_script_fourth">Ads Script Fourth</label>
                <textarea class="form-control" rows="4" placeholder="Enter add script" id="ads_script_fourth" name="ads_script_fourth">{{ config('settings.ads_script_fourth') }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="ads_script_fifth">Ads Script Fifth</label>
                <textarea class="form-control" rows="4" placeholder="Enter add script" id="ads_script_fifth" name="ads_script_fifth">{{ config('settings.ads_script_fifth') }}</textarea>
            </div>
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