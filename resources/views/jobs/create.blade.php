<x-layout>

    <x-page-heading>New Job</x-page-heading>


    <x-forms.form method="POST" action="/jobs">

        <x-forms.input label="Title" name="title" placeholder="Doctor"/>

        <x-forms.input label="Salary" name="salary" placeholder="10.000"/>

        <x-forms.input label="Location" name="location" placeholder="U.S.A"/>


        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />


        <x-forms.input label="URL" name="url" placeholder="https://your.company.website.com/jobs"/>
        

        <x-forms.divider />


        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="medicine, PhD"/>


        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>


</x-layout>