Feature: Zamiana dużych liter na małe

  Scenario: Zamiana dużych liter na małe
    Given I am on homepage
    When I follow "Duże na małe by kamilstrzelecki"
    And I fill in "Podaj napis" with "Programowanie w PHP"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: programowanie w php"