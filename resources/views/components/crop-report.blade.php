 <!-- Action Button -->
 <div>
     <!-- Letterhead -->
    {{-- <link rel="stylesheet" href="{{ asset('pdf.css') }}" type="text/css">  --}}

    <div style="text-align: center; margin-bottom: 1.5rem;">
        <img src="{{ asset('logo_colored.png') }}" alt="App Logo" style="margin: auto; width: 8rem; height: 8rem;">
        <h1 style="color: #4a5568; font-size: 1.5rem; font-weight: 700; margin-top: 1rem; margin-bottom: 1rem;">Crop Destruction Claim Summary</h1>
    </div>

     <!-- Personal Details -->
     <div style="margin-bottom: 1.5rem;">
        <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Name:</label>
        <input type="text" readonly value="{{ $cropDestruction->claimant->name }}" 
            style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
    </div>
    <div style="display: flex; margin-bottom: 1.5rem;">
        <div style="width: 50%; margin-right: 0.5rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Sex:</label>
            <input type="text" readonly value="{{ $cropDestruction->claimant->sex }}" 
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
        <div style="width: 50%; margin-left: 0.5rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Age:</label>
            <input type="text" readonly value="{{ $cropDestruction->claimant->age }}" 
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    </div>
    
    <div style="display: flex; margin-bottom: 1.5rem;">
        <!-- Present Address -->
        <div style="width: 50%; margin-right: 0.5rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Present Address:</label>
            <input type="text" readonly value="{{ $cropDestruction->claimant->address }}" 
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
        
        <!-- Constituency -->
        <div style="width: 50%; margin-left: 0.5rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Constituency:</label>
            <input type="text" readonly value="{{ $cropDestruction->claimant->constituency }}" 
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    
        <!-- Email -->
        <div style="width: 50%; margin-left: 0.5rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Email:</label>
            <input type="text" readonly value="{{ $cropDestruction->claimant->email }}" 
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    
        <!-- Telephone -->
        <div style="width: 50%; margin-left: 0.5rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Telephone:</label>
            <input type="text" readonly value="{{ $cropDestruction->claimant->tel_no }}" 
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    </div>
    

    <div style="display: flex; margin-bottom: 1.5rem;">
        <!-- County -->
        <div style="width: 50%; margin-left: 0.5rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">County:</label>
            <input type="text" readonly value="{{ $cropDestruction->claimant->county }}" 
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
        
        <!-- Sub County -->
        <div style="width: 50%; margin-left: 0.5rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Sub County:</label>
            <input type="text" readonly value="{{ $cropDestruction->claimant->sub_county }}" 
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    
        <!-- Location -->
        <div style="width: 50%; margin-left: 0.5rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Location:</label>
            <input type="text" readonly value="{{ $cropDestruction->claimant->location }}" 
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    
        <!-- Sub Location -->
        <div style="width: 50%; margin-left: 0.5rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">Sub Location:</label>
            <input type="text" readonly value="{{ $cropDestruction->claimant->sub_location }}" 
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
        </div>
    </div>
    


    

    <div style="margin-top: 2.5rem;">
        <h3 style="color: #4A5568; font-size: 1.125rem; font-weight: 600; margin-bottom: 1rem;">Incident Details</h3>
    
        <div style="margin-bottom: 1rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">1. Circumstances of Incident:</label>
            <textarea readonly rows="3" 
                style="box-shadow: 0 0 5px rgba(0,0,0,0.1); border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">{{ $cropDestruction->circumstances }}</textarea>
        </div>

        <div style="margin-bottom: 1rem;">
            <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">2. Crop Name:</label>
                 <input type="text" readonly value="{{ $cropDestruction->crop_name }}"
                     style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
             </div>

             <div style="margin-bottom: 1rem;">
                 <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">3. Animal Responsible:</label>
                 <input type="text" readonly value="{{ $cropDestruction->animal_responsible }}"
                     style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
             </div>

             <div style="margin-bottom: 1rem;">
                 <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">4. Land Ownership
                     Status:</label>
                 <input type="text" readonly value="{{ $cropDestruction->land_ownership_status }}"
                     style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
             </div>

             <div style="margin-bottom: 1rem;">
                 <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">5. Approximate Acreage
                     Destroyed:</label>
                 <input type="text" readonly value="{{ $cropDestruction->acreage }}"
                     style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
             </div>

             <div style="margin-bottom: 1rem;">
                 <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">6. Stage of Growth:</label>
                 <input type="text" readonly value="{{ $cropDestruction->stage }}"
                     style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
             </div>

             <div style="margin-bottom: 1rem;">
                 <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">7. Estimated Value:</label>
                 <input type="text" readonly value="KSH {{ $cropDestruction->value }}"
                     style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
             </div>

             <div style="margin-bottom: 1rem;">
                 <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">8. Measures in Place:</label>
                 <textarea readonly rows="3"
                     style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">{{ $cropDestruction->measures }}</textarea>
             </div>

             <div style="margin-bottom: 1rem;">
                 <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">9. Place of Incident:</label>
                 <input type="text" readonly value="{{ $cropDestruction->place }}"
                     style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
             </div>

             <div style="margin-bottom: 1rem;">
                 <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">10. Location Status:</label>
                 <input type="text" readonly value="{{ $cropDestruction->location_status }}"
                     style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; width: 100%; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
             </div>

             <div style="margin-bottom: 1rem;">
                 <label style="display: block; color: #4A5568; font-size: 0.875rem; font-weight: bold; margin-bottom: 0.5rem;">11. Date and Time of
                     Incident:</label>
                     <div style="display: flex; justify-content: normal;">
                        <input type="date" readonly value="{{ $cropDestruction->date }}"
                               style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none; margin-right: 16px;">
                        <input type="time" readonly value="{{ $cropDestruction->time }}"
                               style="box-shadow: 0 0 5px rgba(0,0,0,0.1); appearance: none; border: 1px solid #E2E8F0; border-radius: 0.375rem; padding: 0.5rem 1rem; color: #4A5568; line-height: 1.5; outline: none;">
                    </div>
                    
                       <!-- Attachments Section -->
                       <div style="margin-top: 2.5rem; border-top: 1px solid #B0BEC5; padding-top: 1.5rem;">
                        <h3 style="color: #546E7A; font-size: 1.125rem; font-weight: 600; margin-bottom: 1rem;">Attachments</h3>
                        <ul style="margin: 0; padding-left: 1rem;">
                            @foreach ($attachments as $attachment)
                                <li style="margin-bottom: 0.5rem;">
                                    <a href="{{ asset('storage/' . $attachment->file_path) }}" target="_blank" style="color: inherit; text-decoration: none;">
                                        {{ $attachment->type }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    
         </div>


     </div>

     <!-- Verification Details -->
     <div style="margin-top: 40px; border-top: 1px solid #CBD5E1; padding-top: 24px;">
        <h3 style="color: #374151; font-size: 1.125rem; font-weight: 600; margin-bottom: 16px;">Verification Details</h3>
        <p style="margin-bottom: 4px;">Verified by: {{ $cropDestruction->verified_by }}</p>
        <p style="margin-bottom: 4px;">EST. No: {{ $cropDestruction->est_no }}</p>
        <p style="margin-bottom: 4px;">Designation: {{ $cropDestruction->designation }}</p>
        <div style="display: flex; align-items: center; margin-top: 24px;">
            <!-- <img src="{{ $cropDestruction->signature }}" alt="Officer Signature" style="width: 128px; height: 48px; margin-right: 16px;"> -->
            <p style="font-size: 0.75rem; color: #6B7280;">Officer's Signature</p>
        </div>
    </div>
    
 </div>
