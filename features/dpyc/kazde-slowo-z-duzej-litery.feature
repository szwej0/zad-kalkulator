Feature: Każde słowo z dużej litery

  Scenario: Każde słowo z dużej litery
    Given I am on homepage
    When I follow "Każde słowo z dużej litery by dpyc"
    And I fill in "Podaj napis" with "Masz babo Placek"
    And I press "Przetwórz"
    Then I should see "Napis po zamianie: Masz Babo Placek"