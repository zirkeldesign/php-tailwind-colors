<style>
    :root {
        @foreach ($colorVariables ?? [] as $colorVariableName => $colorVariableValue) --color-{{ $colorVariableName }}:rgb({{ $colorVariableValue }}); @endforeach
    }
</style>
