<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="row clearfix">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="clearfix">
            <fieldset>
                <legend>
                    Create New Station
                </legend>
            </fieldset>
            <form>
                <div class="form-group">
                    <label for="station-name">Station Name</label>
                    <input id="station-name" name="station-name" placeholder="Station Name" type="text"
                           aria-describedby="station-nameHelpBlock" required="required" class="form-control here">
                    <span id="station-nameHelpBlock" class="form-text text-muted">E.g. Gampaha</span>
                </div>
                <div class="form-group">
                    <label for="station-location">Location</label>
                    <input id="station-location" name="station-location" placeholder="Location" type="text"
                           aria-describedby="station-locationHelpBlock" required="required" class="form-control here">
                    <span id="station-locationHelpBlock" class="form-text text-muted">E.g. Gampaha Town</span>
                </div>
                <div class="form-group">
                    <label for="station-code">Station Code</label>
                    <input id="station-code" name="station-code" placeholder="Station Code" type="text"
                           class="form-control here" required="required">
                </div>
                <div class="form-group">
                    <label for="station-type">Type</label>
                    <div>
                        <select id="station-type" name="station-type" required="required" class="custom-select">
                            <option value="main-station">Main Station</option>
                            <option value="sub-station">Sub Station</option>
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