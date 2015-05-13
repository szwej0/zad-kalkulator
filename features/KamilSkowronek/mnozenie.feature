Feature: Mnozenie

  Scenario: Mnozenie a * b * c * d
    Given I am on homepage
    When I follow "Mnozenie by KamilSkowronek"
    And I fill in "a" with "5"
    And I fill in "b" with "1"
    And I fill in "c" with "2"
    And I fill in "d" with "1"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 10"