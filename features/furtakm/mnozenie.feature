Feature: Mnozenie

  Scenario: Mnozenie a * b * c * d
    Given I am on homepage
    When I follow "Odejmowanie by furtakm"
    And I fill in "a" with "2"
    And I fill in "b" with "3"
    And I fill in "c" with "4"
    And I fill in "d" with "5"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 120"
