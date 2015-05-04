Feature: Zamiana małych na duże

  Scenario: Zamiana małych na duże
    Given I am on homepage
    When I follow "Małe na duże by kzolnierz"
    And I fill in "Podaj napis" with "A Imie JegO CZTerdziesci i CZTERY"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: A IMIE JEGO CZTERDZIESCI I CZTERY"