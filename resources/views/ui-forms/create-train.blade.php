<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
                    <label>Frequency</label>
                    <div>
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input name="train-frequency" type="radio" required="required"
                                       class="custom-control-input" value="daily">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Daily</span>
                            </label>
                        </div>
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input name="train-frequency" type="radio" required="required"
                                       class="custom-control-input" value="weekdays">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Weekdays</span>
                            </label>
                        </div>
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input name="train-frequency" type="radio" required="required"
                                       class="custom-control-input" value="weekdays-saturday">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Weekdays &amp; Saturday</span>
                            </label>
                        </div>
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input name="train-frequency" type="radio" required="required"
                                       class="custom-control-input" value="daily-not-on-holidays">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Daily, Not on Holidays</span>
                            </label>
                        </div>
                        <div class="custom-controls-stacked">
                            <label class="custom-control custom-radio">
                                <input name="train-frequency" type="radio" required="required"
                                       class="custom-control-input" value="weekdays-not-on-holidays">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Weekdays, Not on Holidays</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="train-type">Type</label>
                    <div>
                        <select id="train-type" name="train-type" class="custom-select" required="required">
                            <option value="colombo-commuter">Colombo Commuter</option>
                            <option value="long-distance">Long Distance</option>
                            <option value="reserved">Reserved</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>