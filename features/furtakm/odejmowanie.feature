Feature: Odejmowanie

  Scenario: Odejmowanie a - b - c
    Given I am on homepage
    When I follow "Odejmowanie by furtakm"
    And I fill in "a" with "20"
    And I fill in "b" with "7"
    And I fill in "c" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 10"
