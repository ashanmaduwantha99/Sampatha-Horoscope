@extends('Layouts.homelayout')
@section('homecss')
<style>
    #reserve{
        background-image: url("../Media/Images/solar.jpeg");
        background-positon:50% 50%;
        background-repeat:no-repeat;
        background-size:cover;
        color: yellow;
        height: 500px;
        margin-top: -50px;
    }
</style>
@endsection
@section('title')Reservation @endsection

@section('body')
    <div class="container-fluid" id="reserve">

    </div>
    <div class="container">

        <!-- Row -->
        <div class="row">

            <div class="section-header text-center">
                <br>
                <h2 class="title"><b>කාලය වෙන්කරවා ගැනීමට</b></h2>
            </div>
            <div class="col-md-12">
                <form>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mobile_number" class="col-sm-2 col-form-label">Mobile Number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Mobile Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="dare" placeholder="Date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputState" class="col-sm-2 col-form-label">Problem</label>
                        <div class="col-sm-10">
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                </form>
            </div>
        </div>



    </div>

@endsection