<div>
    <div class="row">
        <div class="col-xl-12">
            <div>
               {{-- Header --}}
                <div class="row p-3">
                    <div class="col-md-6">
                        <h2 class="p-3">{{ $this->headerText }}</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <button 
                            wire:click="toggleAddNoiseSurveyReport"
                            wire:loading.attr="disabled"
                            class="btn btn-outline-success">

                            <span wire:loading.remove>
                                {{ $this->buttonText }}
                            </span>

                            <span wire:loading>
                                Processing...
                            </span>
                        </button>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        @if($showAddNoiseSurveyReport)
                            @livewire('admin.noise-survey-report.add-noise-survey-report', [], key('add-noise-survey-report'))
                        @endif
                    </div>
                </div>

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if(!$showAddNoiseSurveyReport && !$showEditNoiseSurveyReport)
                    <div class="row m-2">
                        @if($noise_survey_reports && $noise_survey_reports->count())
                            @foreach($noise_survey_reports as $noise_survey_report)
                                <div class="col-md-4">
                                    <div class="card main_card">
                                        <div class="card-body">
                                            <img src="{{ $noise_survey_report->image }}" style="width:100%">
                                            <h1 class="mt-3">{{ $noise_survey_report->heading }}</h1>
                                            <p>{{ $noise_survey_report->description }}</p>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <button 
                                                        wire:click="editNoiseSurveyReport({{ $noise_survey_report->id }})"
                                                        class="btn btn-outline-primary w-100">
                                                        Edit
                                                    </button>
                                                </div>

                                                <div class="col-md-6">
                                                    <button 
                                                        wire:click="deleteNoiseSurveyReport({{ $noise_survey_report->id }})"
                                                        onclick="return confirm('Delete this Noise At Work?')"
                                                        class="btn btn-outline-danger w-100">
                                                        Trash
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12 text-center">
                                <p>No Noise Survey Report found.</p>
                            </div>
                        @endif
                    </div>

                    
                    <div class="mt-4 float-right">
                        {{ $noise_survey_reports->links('pagination::bootstrap-4') }}
                    </div>
                @endif


                @if($showEditNoiseSurveyReport)
                    <div class="row mt-3">
                        <div class="col-md-12">
                            @livewire('admin.noise-survey-report.edit-noise-survey-report', ['id' => $editNoiseSurveyReportId], key($editNoiseSurveyReportId))
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>