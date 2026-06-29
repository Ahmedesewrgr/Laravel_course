<x-app-layout>
    <main>
        <div class="container-small">
            <h1 class="car-details-page-title">Add new car</h1>
<<<<<<< HEAD

            <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data"
                class="card add-new-car-form">
                @csrf

=======
            <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data"
                class="card add-new-car-form">
                @csrf
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
                <div class="form-content">
                    <div class="form-details">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
<<<<<<< HEAD
                                    <label>Brand</label>
                                <select name="name" required>
                                    <option value="">Select Brand</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Chevrolet">Chevrolet</option>
                                    <option value="BMW">BMW</option>
                                </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label>Model</label>
                                <select name="company_name" required>
                                    <option value="">Select Model</option>
                                    <option value="Camry">Camry</option>
                                    <option value="Impala">Impala</option>
                                    <option value="X5">X5</option>
                                </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label>Year</label>
                                    <select name="founded_year" required>
=======
                                    <label>brand</label>
                                    <select name="maker_id" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <select name="model_id" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Year</label>
                                    <select name="year" required>
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
                                        <option value="">Year</option>
                                        @for($y = 1990; $y <= 2024; $y++)
                                            <option value="{{ $y }}">{{ $y }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group">
                            <label class="checkbox">
                                <input type="checkbox" name="published_at" value="1" /> Published
                            </label>
                        </div>
                    </div>

                    <div class="form-images">
                        <div class="form-image-upload">
                            <div class="upload-placeholder">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" style="width: 48px">
=======
                        {{-- <div class="form-group">
                            <label>Car Type</label>
                            <div class="row">
                                <div class="col">
                                    <label class="inline-radio">
                                        <input type="radio" name="car_type_id" value="1" required /> Sedan
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="inline-radio">
                                        <input type="radio" name="car_type_id" value="2" /> Hatchback
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="inline-radio">
                                        <input type="radio" name="car_type_id" value="3" /> SUV
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" name="price" placeholder="Price" required />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Vin Code</label>
                                    <input type="text" name="vin" placeholder="Vin Code" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Mileage (ml)</label>
                                    <input type="text" name="mileage" placeholder="Mileage" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Fuel Type</label>
                            <div class="row">
                                <div class="col">
                                    <label class="inline-radio">
                                        <input type="radio" name="fuel_type_id" value="1" required /> Gasoline
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="inline-radio">
                                        <input type="radio" name="fuel_type_id" value="2" /> Diesel
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="inline-radio">
                                        <input type="radio" name="fuel_type_id" value="3" /> Electric
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="inline-radio">
                                        <input type="radio" name="fuel_type_id" value="4" /> Hybrid
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>State/Region</label>
                                    <select name="state" required>
                                        <option value="California">California</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Florida">Florida</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">

                                <div class="form-group">
                                    <label>City</label>
                                    <select name="city_id" required>
                                        <option value="1">Houston</option>
                                        <option value="2">San Diego</option>
                                        <option value="3">Los Angeles</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Address" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" placeholder="Phone" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Detailed Description</label>
                            <textarea name="description" rows="10"></textarea>
                        </div>
--}}
                        <div class="form-group">
                            <label class="checkbox">
                                <input type="checkbox" name="published" value="1" /> Published
                            </label>
                        </div>
                    </div>
                    <div class="form-images">
                        <div class="form-image-upload">
                            <div class="upload-placeholder">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" style="width: 48px">
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
<<<<<<< HEAD
                            <input id="carFormImageUpload" type="file" name="image" multiple />
=======
                            <input id="carFormImageUpload" type="file" name="images[]" multiple />

>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
                        </div>
                        <div id="imagePreviews" class="car-form-images"></div>
                    </div>

                    <div class="p-medium" style="width: 100%">
                        <div class="flex justify-end gap-1">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
<<<<<<< HEAD
                </div>
=======
>>>>>>> 5e246acb31178e9f76957c5b91fef062be249b02
            </form>
        </div>
    </main>
</x-app-layout>
