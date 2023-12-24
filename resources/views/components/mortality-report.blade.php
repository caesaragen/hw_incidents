<!-- Letterhead -->
<div style="text-align: center; margin-bottom: 1.5rem;">
    <img src="{{ asset('logo_colored.png') }}" alt="App Logo" style="margin: auto; width: 8rem; height: 8rem;">
    <h1 style="color: #4a5568; font-size: 1.5rem; font-weight: 700; margin-top: 1rem; margin-bottom: 1rem;">Human
        Death/Injury Claim Summary</h1>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<!-- Personal Details -->

<div
    style="display: flex; flex-direction:column; margin-bottom: 1.5rem; justify-content: space-between; align-items: center; width: 80%; margin: auto;">
    <div style="margin-bottom: 1.5rem;">
        <label
            style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Name:</label>
        <input type="text" readonly value="{{ $humanDeath->claimant->name }}"
            style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
    </div>
    <div style="display: flex; margin-bottom: 1.5rem; width:100%;justify-content: space-between; ">
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Sex:</label>
            <input type="text" readonly value="{{ $humanDeath->claimant->sex }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem;  padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

        <div style="display:flex; align-items:center;  margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Age:</label>
            <input type="text" readonly value="{{ $humanDeath->claimant->age }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem;  padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

    </div>
    <div style="display: flex; margin-bottom: 1.5rem;width:100%; justify-content: space-between; ">
        <div style="display:flex; align-items:center; margin-left: 0.5rem;justify-content: space-between; ">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">
                Address:</label>
            <input type="text" readonly value="{{ $humanDeath->claimant->address }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Constituency:</label>
            <input type="text" readonly value="{{ $humanDeath->claimant->constituency }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

    </div>

    <div style="display: flex; margin-bottom: 1.5rem;width:100%; justify-content: space-between; ">
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Email:</label>
            <input type="text" readonly value="{{ $humanDeath->claimant->email }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Telephone:</label>
            <input type="text" readonly value="{{ $humanDeath->claimant->tel_no }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    </div>

    <div style="display: flex; margin-bottom: 1.5rem;width:100%; justify-content: space-between; ">
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">County:</label>
            <input type="text" readonly value="{{ $humanDeath->claimant->county }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Sub
                County:</label>
            <input type="text" readonly value="{{ $humanDeath->claimant->sub_county }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    </div>
    <div style="display: flex; margin-bottom: 1.5rem;width:100%; justify-content: space-between; ">
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Location:</label>
            <input type="text" readonly value="{{ $humanDeath->claimant->location }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>


        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Sub
                Location:</label>
            <input type="text" readonly value="{{ $humanDeath->claimant->sub_location }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    </div>
    <h3 style="color: #4A5568; font-size: 1.125rem; font-weight: 600; margin-bottom: 1rem;">Next of Kin Details</h3>

    <div style="display: flex; margin-bottom: 1.5rem;width:100%; justify-content: space-between; ">
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Next
                of Kin Name:</label>
            <input type="text" readonly value="{{ $next_of_kin->name }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

        <!-- Constituency -->
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Next
                of Kin Address:</label>
            <input type="text" readonly value="{{ $next_of_kin->address }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>



    </div>
    <div style="display: flex; margin-bottom: 1.5rem;width:100%; justify-content: space-between; ">
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
            style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Email:</label>
        <input type="text" readonly value="{{ $next_of_kin->email }}"
            style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Telephone:</label>
            <input type="text" readonly value="{{ $next_of_kin->tel_no }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    </div>

    <div style="display: flex; margin-bottom: 1.5rem;width:100%; justify-content: space-between; ">
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
            style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">County:</label>
        <input type="text" readonly value="{{ $next_of_kin->county }}"
            style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
            style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Sub
            County:</label>
        <input type="text" readonly value="{{ $next_of_kin->sub_county }}"
            style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    </div>



    <div style="display: flex; margin-bottom: 1.5rem;width:100%; justify-content: space-between; ">
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Location:</label>
            <input type="text" readonly value="{{ $next_of_kin->location }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Sub
                Location:</label>
            <input type="text" readonly value="{{ $next_of_kin->sub_location }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    </div>

    <h3 style="color: #4A5568; font-size: 1.125rem; font-weight: 600; margin-bottom: 1rem;">Chief's Comments</h3>
    <div style="display: flex; margin-bottom: 1.5rem;width:100%; justify-content: space-between; ">
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Chief
                Name:</label>
            <input type="text" readonly value="{{ $chiefs_comments->chief_name }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

        <!-- Constituency -->
        <div style="display:flex; align-items:center; margin-left: 0.5rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Chief
                Phone:</label>
            <input type="text" readonly value="{{ $chiefs_comments->chief_phone }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

    </div>
    <textarea readonly rows="3"
        style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">{{ $chiefs_comments->chief_comments }}</textarea>

</div>






<!-- Incident Details -->
<div style="margin-top: 2.5rem;">

    <div style="margin-top: 2.5rem;">
        <h3 style="color: #4A5568; font-size: 1.125rem; font-weight: 600; margin-bottom: 1rem;">Incident Details</h3>
        <div style="margin-bottom: 1rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Date
                of Reporting:
                {{ $humanDeath->created_at }}</label>
            {{-- <input type="text" readonly value="{{ $humanDeath->created_at }}" --}}
            {{--  style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;"> --}}
        </div>
        <div style="margin-bottom: 1rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">1.
                Place of Death:</label>
            <input type="text" readonly value="{{ $humanDeath->place_of_death }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">2.
                Animal Responsible:</label>
            <input type="text" readonly value="{{ $humanDeath->animal_responsible }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">3.
                Inside or Outside Protected
                Area:</label>
            <input type="text" readonly value="{{ $humanDeath->inside_outside_pa }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">4.GPS
                Coordinates:</label>
            <input type="text" readonly value="{{ $humanDeath->gps_coordinates }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">5.
                Circumstances:</label>
            <input type="text" readonly value="{{ $humanDeath->circumstances }}"
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>





        <div style="margin-bottom: 1rem;">
            <label
                style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">6.
                Date and Time of
                Incident:</label>
            <div class="flex space-x-4">
                <input type="text" readonly value="{{ $humanDeath->date_of_incident }}"
                    style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
                <input type="text" readonly value="{{ $humanDeath->time_of_incident }}"
                    style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
            </div>
        </div>
    </div>

    <!-- Attachments Section -->
    <div style="margin-top: 2.5rem; border-top: 1px solid #B0BEC5; padding-top: 1.5rem;">
        <h3 style="color: #546E7A; font-size: 1.125rem; font-weight: 600; margin-bottom: 1rem;">Attachments</h3>
        <ul style="margin: 0; padding-left: 1rem;">
            @foreach ($attachments as $attachment)
                <li style="margin-bottom: 0.5rem;">
                    <a href="{{ asset('storage/' . $attachment->file_path) }}" target="_blank"
                        style="color: inherit; text-decoration: none;">
                        {{ $attachment->type }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Verification Details -->
    <div class="mt-10 border-t border-blueGray-200 pt-6">
        <h3 style="color: #4A5568; font-size: 1.125rem; font-weight: 600; margin-bottom: 1rem;">Verification Details
        </h3>
        <p style="margin-bottom: 4px;"> Verified by: {{ $humanDeath->verified_by }}</p>
        <p style="margin-bottom: 4px;"> EST. No: {{ $humanDeath->est_no }}</p>
        <p style="margin-bottom: 4px;"> Designation: {{ $humanDeath->designation }}</p>
        <div class="flex items-center mt-6">
            {{-- <img src="{{ $humanDeath->signature }}" alt="Officer Signature" class="w-32 h-12 mr-4"> --}}
            <p style="font-size: 0.75rem; color: #6B7280;">Officer's Signature</p>
        </div>
    </div>
