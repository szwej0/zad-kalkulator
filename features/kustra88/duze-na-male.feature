Feature: Zamiana dużych liter na małe

  Scenario: Zamiana dużych liter na małe
    Given I am on homepage
    When I follow "Duże na małe by kustra88"
    And I fill in "Text" with "Ala ma Kota"
    And I press "Przetwórz"
    Then I should see "ala ma kota"