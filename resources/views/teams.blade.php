<x-layouts.base title="Команды">
  <x-shared.select id="flow" label="Выберите дисциплину для отображения:">
    <option value="" disabled>Дисциплина</option>
    <option value="Веб-технологии РГР">Веб-технологии РГР</option>
    <option value="Проектирование в профессиональной сфере">
      Проектирование в профессиональной сфере
    </option>
    <option value="Курсовой проект">Курсовой проект</option>
  </x-shared.select>

  <div class="mt-8 space-y-6">
    <x-entities.team-card
      :tags="['Веб-программирование', 'Профессиональный трек']"
    >
      <x-slot:project>
        Витрина студенческих проектов
      </x-slot>
      <x-slot:title>Шенген</x-slot>
      <x-slot:description>
        Команда "Шенген" занимается разработкой веб-ориентированных
        информационных систем. На данный момент является одной из лучших на
        потоке. Нам может дать бой разве что Слава.
      </x-slot>
    </x-entities.team-card>
  </div>
</x-layouts.base>
