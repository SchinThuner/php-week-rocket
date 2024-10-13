<x.layouts.app>
    <!-- quando nome da variavel é o mesmo da propriedade a ser passada
    no exemplo abaixo :project="$project", pode-se informar apenas 
    :$project -->
    <!-- <livewire:projects.show :project="$project" /> -->
    <!-- <livewire:projects.proposals :project="$project" /> -->
    <livewire:projects.show :$project />
    <livewire:projects.proposals :$project />
</x.layouts.app>
