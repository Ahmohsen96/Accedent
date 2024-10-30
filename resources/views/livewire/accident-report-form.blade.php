<div>
    <header style="background-color: #007bff; color: white; padding: 15px; text-align: center;">
        <img src="{{ asset('images/logo.png') }}" alt="Company Logo" style="max-width: 150px; height: auto;">
    </header>

    <div class="container">
        <form wire:submit.prevent="submit">
            <h1>Accident Investigation Report</h1>

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

            <!-- Acknowledgement Section -->
            <h2>Acknowledgement</h2>
            <div class="form-section">
                <label>ACKNOWLEDGEMENT NAME:</label>
                <input type="text" wire:model="acknowledgement_name" placeholder="Your Name">
                @error('acknowledgement_name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>ACKNOWLEDGEMENT SIGNATURE:</label>
                <input type="text" wire:model="acknowledgement_signature" placeholder="Signature">
                @error('acknowledgement_signature') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>ACKNOWLEDGEMENT DATE:</label>
                <input type="date" wire:model="acknowledgement_date">
                @error('acknowledgement_date') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit">Submit Report</button>
            <button type="button" onclick="window.history.back()" style="background-color: #6c757d; margin-top: 10px;">Back</button>
        </form>

        @if (session()->has('message'))
            <div class="alert">{{ session('message') }}</div>
        @endif
    </div>

    <footer style="background-color: #f1f1f1; text-align: center; padding: 10px; margin-top: 20px;">
        <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
    </footer>

    <style>
        .container {
            max-width: 700px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
        }
        img {
            max-width: 150px; /* Adjust as necessary for your logo */
            height: auto;
            margin-bottom: 10px; /* Add some space below the logo */
        }
        .form-section {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1em;
        }
        input:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .alert {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            margin-top: 15px;
            text-align: center;
            border: 1px solid #d6e9c6;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</div>
