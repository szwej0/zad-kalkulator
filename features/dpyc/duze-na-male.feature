Feature: Zamiana dużych liter na małe

  Scenario: Zamiana dużych liter na małe
    Given I am on homepage
    When I follow "Duże na małe by dpyc"
    And I fill in "Podaj napis" with "Masz Babo Placek"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: masz babo placek"