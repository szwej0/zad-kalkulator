
Feature: Zamiana malych na duze

  Scenario: Zamiana dużych liter na małe
    Given I am on homepage
    When I follow "Male na duze by szwej0"
    And I fill in "Podaj napis" with "Ala ma Kota"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: ALA MA KOTA"