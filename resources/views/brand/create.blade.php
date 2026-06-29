<x-app-layout>
    <main>
        <div class="container-small">
            <h1 class="car-details-page-title">Add new car</h1>

            <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data"
                class="card add-new-car-form">
                @csrf

                <div class="form-content">
                    <div class="form-details">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
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
                                        <option value="">Year</option>
                                        @for($y = 1990; $y <= 2024; $y++)
                                            <option value="{{ $y }}">{{ $y }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>

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
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                            <input id="carFormImageUpload" type="file" name="image" multiple />
                        </div>
                        <div id="imagePreviews" class="car-form-images"></div>
                    </div>

                    <div class="p-medium" style="width: 100%">
                        <div class="flex justify-end gap-1">
                            <button type="reset" class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
</x-app-layout>
