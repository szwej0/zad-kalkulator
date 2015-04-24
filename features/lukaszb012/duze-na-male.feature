Feature: Zamiana dużych liter na małe

  Scenario: Zamiana dużych liter na małe
    Given I am on homepage
    When I follow "Duże na małe by LukaszB012"
    And I fill in "Podaj napis" with "Jakis Napis"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: jakis napis
