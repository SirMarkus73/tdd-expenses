<?php

use App\Domain\Person;

it('should create a Person', function () {
    // Arrange & Act
    $oscar = new Person('Oscar');

    // Assert
    expect($oscar->name)->toBe('Oscar');
});

it('should compare two Persons for equality', function () {
    // Arrange

    // Act & Assert
});
