Feature: Zamiana dużych liter na małe

  Scenario: Zamiana dużych liter na małe
    Given I am on homepage
    When I follow "Duże na małe by kzolnierz"
    And I fill in "Podaj napis" with "A Imie JegO CZTerdziesci i CZTERY"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: a imie jego czterdziesci i cztery"