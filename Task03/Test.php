<?php

namespace NikitaMakarov\Task03;

function runTest()
{
    $student1 = new Student('Nikita1', 'Makarov1', 'FMiIT', 3, 2);
    $student2 = new Student('Nikita2', 'Makarov2', 'FMiIT', 3, 2);
    $student3 = new Student('Nikita3', 'Makarov3', 'FMiIT', 3, 2);
    $studentsList = new StudentsList();
    $studentsList->add($student1);
    $studentsList->add($student2);
    $studentsList->add($student3);
    $studentsList->store('students.txt');
    //$studentsList->load('students.txt');
    echo $studentsList->get(2)->__toString();
}
