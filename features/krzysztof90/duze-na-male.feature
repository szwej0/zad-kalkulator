Feature: Zamiana dużych liter na małe

  Scenario: Zamiana dużych liter na małe
    Given I am on homepage
    When I follow "Duże na małe by krzysztof90"
    And I fill in "Podaj napis" with "Dzik jeZD dziki"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: dzik jezd dziki"
