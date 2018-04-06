<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="row clearfix">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="clearfix">
            <fieldset>
                <legend>
                    Create New Record
                </legend>
            </fieldset>
            <form>
                <div class="form-group">
                    <label for="station-id">Station</label>
                    <div>
                        <select id="station-id" name="station-id" required="required" class="custom-select">
                            <option value="1">Anuradhapuraya</option>
                            <option value="2">Batuwatta</option>
                            <option value="3">Gampaha</option>
                            <option value="4">Ganemulla</option>
                            <option value="5">Ragama</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="train-id">Train</label>
                    <div>
                        <select id="train-id" name="train-id" class="custom-select" required="required">
                            <option value="1">Udarata Menike</option>
                            <option value="2">Muthu Menike</option>
                            <option value="3">Rajarata Rajina</option>
                            <option value="4">Galu Kumari</option>
                            <option value="5">Badulu Kumari</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="arrival-time">Arrival Time</label>
                    <input id="arrival-time" name="arrival-time" placeholder="Arrival Time" type="text"
                           class="form-control here" required="required">
                </div>
                <div class="form-group">
                    <label for="departure-time">Departure Time</label>
                    <input id="departure-time" name="departure-time" placeholder="Departure Time" type="text"
                           class="form-control here" required="required">
                </div>
                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>