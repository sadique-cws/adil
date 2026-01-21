@extends('layouts.main')

@section('title', 'Upload Portfolio Image')

@section('content')
<section class="section" style="padding-top: 150px; min-height: 80vh;">
    <div class="container">
        <div class="glass-enquiry-card" style="max-width: 650px; margin: 0 auto; padding: 40px;">

            <!-- Header -->
            <div style="text-align: center; margin-bottom: 35px;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--accent-color), #d97706); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; box-shadow: 0 8px 20px rgba(251, 146, 60, 0.3);">
                    <i class="fas fa-folder-open" style="font-size: 30px; color: white;"></i>
                </div>
                <h2 style="margin-bottom: 8px; font-size: 28px;">Add to Portfolio</h2>
                <p style="color: var(--text-secondary); font-size: 15px;">Upload & showcase your latest project</p>
            </div>

            <!-- Success Message -->
            @if(session('success'))
            <div style="background: linear-gradient(135deg, #dcfce7, #d1fae5); border-left: 4px solid #22c55e; color: #166534; padding: 20px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 4px 12px rgba(34, 197, 94, 0.15);">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                    <i class="fas fa-check-circle" style="font-size: 24px; color: #22c55e;"></i>
                    <strong style="font-size: 16px;">{{ session('success') }}</strong>
                </div>
                <div style="margin-top: 12px; background: white; padding: 12px; border-radius: 8px;">
                    <p style="font-size: 0.85rem; margin-bottom: 6px; color: #166534; font-weight: 600;">Preview:</p>
                    <img src="{{ session('url') }}" alt="Uploaded" style="max-height: 180px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                </div>
            </div>
            @endif

            <!-- Error Message -->
            @if(session('error'))
            <div style="background: linear-gradient(135deg, #fee2e2, #fecaca); border-left: 4px solid #ef4444; color: #991b1b; padding: 18px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 4px 12px rgba(239, 68, 68, 0.15);">
                <div style="display: flex; align-items: center; gap: 12px;">
                    <i class="fas fa-exclamation-triangle" style="font-size: 22px;"></i>
                    <strong>{{ session('error') }}</strong>
                </div>
            </div>
            @endif

            <!-- Back Link -->
            <a href="{{ route('admin.dashboard') }}" style="display: inline-flex; align-items: center; gap: 8px; margin-bottom: 25px; color: var(--accent-color); text-decoration: none; font-weight: 500; transition: all 0.3s ease;">
                <i class="fas fa-arrow-left"></i> Back to Dashboard
            </a>

            <!-- Upload Form -->
            <form action="{{ route('admin.upload.post') }}" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 24px;">
                @csrf

                <!-- File Upload Area -->
                <div style="position: relative;">
                    <label style="display: block; margin-bottom: 8px; color: var(--text-primary); font-weight: 600; font-size: 14px;">
                        <i class="far fa-image" style="margin-right: 6px; color: var(--accent-color);"></i>
                        Project Image
                    </label>
                    <div class="input-group" style="width: 100%; position: relative; background: rgba(255,255,255,0.03); border: 2px dashed rgba(251, 146, 60, 0.3); border-radius: 12px; padding: 25px; text-align: center; transition: all 0.3s ease;">
                        <input type="file" name="image" required accept="image/*" style="position: absolute; inset: 0; opacity: 0; cursor: pointer; z-index: 2;" onchange="updateFileName(this)">
                        <div style="pointer-events: none;">
                            <i class="fas fa-cloud-upload-alt" style="font-size: 40px; color: var(--accent-color); margin-bottom: 12px; opacity: 0.7;"></i>
                            <p style="color: var(--text-secondary); margin: 0; font-size: 14px;" id="file-label">
                                <span style="color: var(--accent-color); font-weight: 600;">Click to browse</span> or drag & drop
                            </p>
                            <p style="color: var(--text-secondary); margin-top: 6px; font-size: 12px; opacity: 0.7;">PNG, JPG, GIF, WEBP (Max 20MB)</p>
                        </div>
                    </div>
                </div>

                <!-- Caption Input -->
                <div>
                    <label style="display: block; margin-bottom: 8px; color: var(--text-primary); font-weight: 600; font-size: 14px;">
                        <i class="far fa-edit" style="margin-right: 6px; color: var(--accent-color);"></i>
                        Project Caption
                    </label>
                    <div class="input-group" style="width: 100%; position: relative;">
                        <i class="fas fa-quote-left" style="position: absolute; left: 18px; top: 50%; transform: translateY(-50%); color: var(--accent-color); opacity: 0.7; z-index: 1;"></i>
                        <input type="text" name="caption" placeholder="e.g. Luxury Glass Railing for Modern Villa" required style="width: 100%; padding: 14px 18px 14px 48px; border: 2px solid rgba(255,255,255,0.1); border-radius: 10px; background: rgba(255,255,255,0.05); color: var(--text-primary); font-size: 15px; transition: all 0.3s ease;">
                    </div>
                    <p style="margin-top: 6px; font-size: 12px; color: var(--text-secondary); opacity: 0.8;">
                        <i class="fas fa-info-circle" style="margin-right: 4px;"></i>
                        This caption will be displayed when users hover over the image
                    </p>
                </div>

                <!-- Submit Button -->
                <button type="submit" style="width: 100%; padding: 16px; background: linear-gradient(135deg, var(--accent-color), #d97706); color: white; border: none; border-radius: 12px; font-size: 16px; font-weight: 600; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 10px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(251, 146, 60, 0.4); margin-top: 10px;">
                    <i class="fas fa-upload"></i> Upload to Portfolio
                </button>
            </form>
        </div>
    </div>
</section>

<style>
    .input-group input[type="text"]:focus {
        outline: none;
        border-color: var(--accent-color);
        background: rgba(255, 255, 255, 0.08);
    }

    .input-group:has(input[type="file"]:hover) {
        border-color: var(--accent-color);
        background: rgba(251, 146, 60, 0.05);
    }

    button[type="submit"]:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 25px rgba(251, 146, 60, 0.5);
    }

    button[type="submit"]:active {
        transform: translateY(0);
    }
</style>

<script>
    function updateFileName(input) {
        const label = document.getElementById('file-label');
        if (input.files && input.files[0]) {
            const fileName = input.files[0].name;
            label.innerHTML = `<span style="color: var(--accent-color); font-weight: 600;"><i class="fas fa-check-circle"></i> ${fileName}</span>`;
        }
    }
</script>
@endsection