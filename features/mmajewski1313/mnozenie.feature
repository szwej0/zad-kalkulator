Feature: Mnozenie

  Scenario: Mnozenie a * b * c * d
    Given I am on homepage
    When I follow "Odejmowanie by mmajewski1313"
    And I fill in "a" with "10"
    And I fill in "b" with "11"
    And I fill in "c" with "12"
    And I fill in "d" with "13"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 17160"
