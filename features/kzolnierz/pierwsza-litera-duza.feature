Feature: Każde słowo z dużej litery

  Scenario: Każde słowo z dużej litery
    Given I am on homepage
    When I follow "Każde słowo z dużej litery by kzolnierz"
    And I fill in "Podaj napis" with "A Imie JegO CZTerdziesci i CZTERY"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: A Imie Jego Czterdziesci I Cztery"