<x-layout heading="JOB">

    <h2 class= "font-bold text-lg">{{ $job->title }}</h2>
    <p>This job pay {{ $job->salary }} per year.</p>
    @can('edit',$job)
    <p class= "mt-4">
        <a href="/jobs/{{$job->id}}/edit"  class="rounded-md bg-amber-600 px-3 py-2  text-sm font-semibold text-white shadow-xs hover:bg-amber-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">EDIT JOB</a>
    </p>
    @endcan
</x-layout>