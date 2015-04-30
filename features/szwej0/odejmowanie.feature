Feature: Obliczenia

  Scenario: Odejmowanie a - b
    Given I am on homepage
    When I follow "Odejmowanie by szwej0"
    And I fill in "a" with "5"
    And I fill in "b" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 2"
