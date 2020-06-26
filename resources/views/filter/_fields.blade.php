<div class="container">
    <div class="row">
        <div class="col-md-9">
            <section>
                <form action="/filter" method="get">
                    <div class="row">
                        {{-- <div class="col-md-9">
                            <label for="range">Max price range:</label><br>
                            <input type="range" name="" value="" min="0" max="100" id="range" style="width: 100%;">
                        </div> --}}
                        <div class="col-md-3">
                            <label for="">Max price:</label>
                            <input type="text" name="max_price" style="width: 100%;" id="range">
                        </div>
                    </div>
                    <div class="row">
                        {{-- <div class="col-md-9">
                            <label for="">Min price range:</label><br>
                            <input type="range" min="0" max="100" name="min_price" style="width: 100%;">
                        </div> --}}
                        <div class="col-md-3">
                            <label for="">Min price:</label>
                            <input type="text" name="min_price" style="width: 100%;">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="checkbox" id="entire" name="roomType[]" value="Entire Room">
                            <label for="entire"> Entire Room</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" name="roomType[]" value="Private">
                            <label for="">Private</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" name="roomType[]" value="Shared">
                            <label for="">Shared</label>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Accommodate:</label><br>
                            <select name="accommodate" id="" style="width: 100%">
                                <option value="">select...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4+">4+</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Bedroom:</label><br>
                            <select name="bedroom" id="" style="width: 100%">
                                <option value="">select...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4+">4+</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Bathroom:</label><br>
                            <select name="bathroom" id="" style="width: 100%">
                                <option value="">select...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4+">4+</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="checkbox" name="tv" value="on">
                            <label for="">TV</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" name="kitchen" value="on">
                            <label for="">Kitchen</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" name="internet"  value="on">
                            <label for="">Internet</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" name="heating" value="on">
                            <label for="">Heating</label>
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" name="airconditing" value="on">
                            <label for="">Air Conditioning</label>
                        </div>
                    </div>
                    <hr>
                    <div  style="text-align: center">
                        <button type="submit" class="btn btn-success" style="width: 50%;">Search</button>
                    </div>
                </form>
            </section>
            <br>
            <section>
                <div class="row">
                    <div class="card">

                    </div>
                </div>
            </section>
            
        </div>
        <div class="col-md-3">
            <div id="map" style="height: 100%"></div>
        </div>
    </div>
</div>