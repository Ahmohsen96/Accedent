<div>
    <header style="background-color: white; color: rgb(6, 0, 0); padding: 20px;">
        <div style="display: flex; align-items: center; justify-content: space-between;">
            <!-- Logo -->
            <img src="{{ asset('images/logo.png') }}" alt="Company Logo" style="max-width: 140px; height: auto;">

            <div style="text-align: center; flex-grow: 1;">
                <h1 style="margin: 0; font-size: 1.2em; font-weight: bold;">DANIA AIR CONTROL SYSTEM FACTORY</h1>
                <h2 style="margin: 5px 0 0; font-size: 1.2em;">Accident Investigation Report | تقرير التحقيق في الحوادث</h2>
            </div>

            <div style="width: 50px;"></div>
        </div>
    </header>

    <div class="container">
        <form wire:submit.prevent="submit">

            <div class="form-section">
                <label>ACCIDENT DATE / تاريخ الحادث</label>
                <input type="date" wire:model="accident_date">
                @error('accident_date') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>ACCIDENT TIME / وقت الحادث </label>
                <input type="time" wire:model="accident_time">
                @error('accident_time') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>REGION / المنطقة </label>
                <input type="text" wire:model="region" placeholder="Region">
                @error('region') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>LOCATION / الموقع </label>
                <input type="text" wire:model="location" placeholder="Location">
                @error('location') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>NAME OF INJURED EMPLOYEE / اسم الموظف المصاب</label>
                <input type="text" wire:model="injured_employee_name" placeholder="Employee Name">
                @error('injured_employee_name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>DEPARTMENT / القسم </label>
                <input type="text" wire:model="department" placeholder="Department">
                @error('department') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>DESCRIPTION OF ACCIDENT / وصف الحادث</label>
                <textarea wire:model="description" placeholder="Describe the accident"></textarea>
                @error('description') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-section">
                <label>DESCRIBE LOSS / وصف الخسارة</label>
                <textarea wire:model="loss" placeholder="Describe the loss"></textarea>
            </div>

            <div class="form-section">
                <label>IMMEDIATE CAUSES / الاسباب المباشرة</label>
                <textarea wire:model="immediate_causes" placeholder="Immediate causes"></textarea>
            </div>

            <div class="form-section">
                <label>UNDERLYING CAUSES / الاسباب الكامنة</label>
                <textarea wire:model="underlying_causes" placeholder="Underlying causes"></textarea>
            </div>

            <div class="form-section">
                <label>ROOT CAUSES / الاسباب الجذرية </label>
                <textarea wire:model="root_causes" placeholder="Root causes"></textarea>
            </div>

            <div class="form-section">
                <label>RECOMMENDATIONS / التوصيات</label>
                <textarea wire:model="recommendations" placeholder="Recommendations"></textarea>
            </div>

            <!-- Acknowledgement Section -->
            <h2>Acknowledgement</h2>
            <div class="form-section">
                <label>ACKNOWLEDGEMENT NAME</label>
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

</div>
