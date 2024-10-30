<div>
    <div class="container">
        <h1>Accident Investigation Report</h1>
        <form wire:submit.prevent="submit">
            <div class="form-section">
                <label>ACCIDENT DATE:</label>
                <input type="date" wire:model="accident_date">
                @error('accident_date') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>ACCIDENT TIME:</label>
                <input type="time" wire:model="accident_time">
                @error('accident_time') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>REGION:</label>
                <input type="text" wire:model="region" placeholder="Region">
                @error('region') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>LOCATION:</label>
                <input type="text" wire:model="location" placeholder="Location">
                @error('location') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>NAME OF INJURED EMPLOYEE:</label>
                <input type="text" wire:model="injured_employee_name" placeholder="Employee Name">
                @error('injured_employee_name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>DEPARTMENT:</label>
                <input type="text" wire:model="department" placeholder="Department">
                @error('department') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>DESCRIPTION OF ACCIDENT:</label>
                <textarea wire:model="description" placeholder="Describe the accident"></textarea>
                @error('description') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>DESCRIBE LOSS:</label>
                <textarea wire:model="loss" placeholder="Describe the loss"></textarea>
            </div>

            <div class="form-section">
                <label>IMMEDIATE CAUSES:</label>
                <textarea wire:model="immediate_causes" placeholder="Immediate causes"></textarea>
            </div>

            <div class="form-section">
                <label>UNDERLYING CAUSES:</label>
                <textarea wire:model="underlying_causes" placeholder="Underlying causes"></textarea>
            </div>

            <div class="form-section">
                <label>ROOT CAUSES:</label>
                <textarea wire:model="root_causes" placeholder="Root causes"></textarea>
            </div>

            <div class="form-section">
                <label>RECOMMENDATIONS:</label>
                <textarea wire:model="recommendations" placeholder="Recommendations"></textarea>
            </div>

            <button type="submit">Submit Report</button>
        </form>

        @if (session()->has('message'))
            <div class="alert">{{ session('message') }}</div>
        @endif
    </div>

    <style>
        .container { max-width: 700px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
        h1 { text-align: center; margin-bottom: 20px; }
        .form-section { margin-bottom: 15px; }
        label { font-weight: bold; display: block; }
        input, textarea { width: 100%; padding: 8px; margin-top: 5px; }
        .error { color: red; font-size: 0.9em; }
        .alert { background-color: #dff0d8; color: #3c763d; padding: 10px; margin-top: 15px; text-align: center; }
        button { width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
    </style>
</div>
