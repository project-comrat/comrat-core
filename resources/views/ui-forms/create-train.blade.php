@extends('templates.ui-master')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
@endsection

@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>


    <script>
        $(document).ready(function(){
            var date_input=$('input[name="special-date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })
    </script>
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="clearfix">
                <fieldset>
                    <legend>
                        Create New Train
                    </legend>
                </fieldset>
                <form>
                    <div class="form-group">
                        <label for="train-name">Train Name</label>
                        <input id="train-name" name="train-name" placeholder="Train Name" type="text"
                               aria-describedby="train-nameHelpBlock" required="required" class="form-control here">
                        <span id="train-nameHelpBlock" class="form-text text-muted">E.g. Muthu Menike</span>
                    </div>
                    <div class="form-group">
                        <label for="train-number">Train Number</label>
                        <input id="train-number" name="train-number" placeholder="Train Number" type="text"
                               aria-describedby="train-numberHelpBlock" required="required" class="form-control here">
                        <span id="train-numberHelpBlock" class="form-text text-muted">E.g. 12543</span>
                    </div>
                    <div class="form-group">
                        <label for="train-frequency">Frequency (Only for displaying)</label>
                        <div>
                            <select id="train-frequency" name="train-type" class="form-control" required="required">
                                <option value="colombo-commuter">Daily</option>
                                <option value="long-distance">Weekdays</option>
                                <option value="reserved">Weekdays &amp; Saturday</option>
                                <option value="reserved">Daily, Not on Holidays</option>
                                <option value="reserved">Weekdays, Not on Holidays</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="train-type">Type</label>
                        <div>
                            <select id="train-type" name="train-type" class="form-control" required="required">
                                <option value="colombo-commuter">Colombo Commuter</option>
                                <option value="long-distance">Long Distance</option>
                                <option value="reserved">Reserved</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="train-dates">Train Dates</label>
                        <div class="checkbox">
                            <label>
                                <input name="sunday" id="sunday" type="checkbox" value="">
                                Sunday
                            </label>
                            <label>
                                <input name="monday" id="monday" type="checkbox" value="">
                                Monday
                            </label>
                            <label>
                                <input name="tuesday" id="tuesday" type="checkbox" value="">
                                Tuesday
                            </label>
                            <label>
                                <input name="wednesday" id="wednesday" type="checkbox" value="">
                                Wednesday
                            </label>
                            <label>
                                <input name="thursday" id="thursday" type="checkbox" value="">
                                Thursday
                            </label>
                            <label>
                                <input name="friday" id="friday" type="checkbox" value="">
                                Friday
                            </label>
                            <label>
                                <input name="saturday" id="saturday" type="checkbox" value="">
                                Saturday
                            </label>
                        </div>
                        <div class="form-group"> <!-- Date input -->
                            <label class="control-label" for="date">Special Train Date</label>
                            <input class="form-control" id="special-date" name="special-date" placeholder="MM/DD/YYY" type="text"/>
                            <button class="btn btn-primary">Add</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection