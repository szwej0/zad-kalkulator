Feature: Odejmowanie

  Scenario: Odejmowanie a - b - c
    Given I am on homepage
    When I follow "Odejmowanie by Konradha9"
    And I fill in "a" with "10"
    And I fill in "b" with "3"
    And I fill in "c" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 5"
