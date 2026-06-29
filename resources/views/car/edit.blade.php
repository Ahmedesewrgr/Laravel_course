<x-app-layout>
    <main>
        <div class="container-small">
            <h1>Edit Car</h1>

            <form action="{{ route('car.update', $car->id) }}" method="POST">
                @csrf
                @method('PUT')

                <label>Maker</label>
                <input type="number" name="maker_id" value="{{ old('maker_id', $car->maker_id) }}" required>

                <label>Model</label>
                <input type="number" name="model_id" value="{{ old('model_id', $car->model_id) }}" required>

                <label>Year</label>
                <input type="number" name="year" value="{{ old('year', $car->year) }}" required>

                <label>Price</label>
                <input type="text" name="price" value="{{ old('price', $car->price) }}">

                <label>VIN</label>
                <input type="text" name="vin" value="{{ old('vin', $car->vin) }}">

                <label>Mileage</label>
                <input type="number" name="mileage" value="{{ old('mileage', $car->mileage) }}">

                <label>Address</label>
                <input type="text" name="address" value="{{ old('address', $car->address) }}">

                <label>Phone</label>
                <input type="text" name="phone" value="{{ old('phone', $car->phone) }}">

                <label>Description</label>
                <textarea name="description">{{ old('description', $car->description) }}</textarea>

                <label>Published</label>
                <input type="checkbox" name="published" value="1" {{ $car->published_at ? 'checked' : '' }}>

                <button type="submit">Update</button>
            </form>
        </div>


    </main>
</x-app-layout>
