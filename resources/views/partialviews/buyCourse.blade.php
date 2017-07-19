<div class="container">
    <div class="col-md-12">
        <h5 class="text-center m-3">Make your selections:</h5>
        <div class="row">
            <div class="col-md-6">
                <p class="text-left">For how long would you like access to the course?</p>
                <form>
                    <fieldset class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="accessPeriod" id=accessPeriod_{{$course_id}} value="option1" checked>30 days</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="accessPeriod" id=accessPeriod_{{$course_id}} value="option2">60 days</label>
                        </div>
                        <div class="form-check ">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="accessPeriod" id=accessPeriod_{{$course_id}} value="option3">90 days</label>
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Voucher</label>
                        <input type="text" class="form-control" id="voucher_{{$course_id}}" name="voucher" aria-describedby="emailHelp" placeholder="Enter code">
                    </div>
                    <button type="submit" class="btn btn-success">Press to Start Learning</button>
                </form>
            </div>
            <div class="col-md-6">
                <p class="text-center">My Wallet:</p>
                <table class="table table-sm table-bordered">
                    <tbody>
                    <tr>
                        <th>Opening Balance :</th>
                        <td colspan="2" align="right" id=WalletOpen_{{$course_id}}>100 Tokens</td>
                    </tr>
                    <tr>
                        <th scope="row">Price :</th>
                        <td colspan="2" align="right" id=Price_{{$course_id}}>4.97 Tokens</td>

                    </tr>
                    <tr>
                        <th scope="row">Closing Balance :</th>
                        <td colspan="2" align="right" id=WalletClose_{{$course_id}}>27 Tokens</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

